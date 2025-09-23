<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instrument;
use App\Models\StaffMaster;
use App\Models\AdminService;

class InstrumentController extends BaseController
{
    public function instrumentsList()
    {
        try {
            $instruments = Instrument::with('staff')->orderBy('id', 'desc')->get();
            $this->instrumentsData = $instruments;
            return view('backend.admin.instruments.list', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function addInstrument($id = null)
    {
        try {
            $this->staffData = StaffMaster::select('id', 'first_name')->where('status', 1)->get()->toArray();
            
            if (!empty($id)) {
                $this->instrumentsData = Instrument::find($id);
            } else {
                $this->instrumentsData = null; // Set to null for new instrument
            }
            return view('backend.admin.instruments.add', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function storeInstrument(Request $request)
    {
        try {
            // Custom validation rules
            $rules = [
                'area' => 'required',
                'name' => 'required',
                'assigned_to' => 'required',
                'period' => 'required|in:daily,weekly,monthly,yearly',
                'condition' => 'required',
                'last_check_date' => 'required|date',
                'given_for' => 'required|in:yes,no',
            ];

            // Only add validation for name_of_given and date_of_given if given_for is 'yes'
            if ($request->given_for === 'yes') {
                $rules['name_of_given'] = 'required';
                $rules['date_of_given'] = 'required|date';
            }

            $request->validate($rules);

            // Only allow fields that exist in the table
            $data = $request->only([
                'area',
                'name',
                'assigned_to',
                'period',
                'condition',
                'last_check_date',
                'given_for',
                'name_of_given',
                'date_of_given',
            ]);

            // If given_for is 'no', set name_of_given and date_of_given to null
            if ($data['given_for'] === 'no') {
                $data['name_of_given'] = null;
                $data['date_of_given'] = null;
            }

            if (!empty($request->instrument_id)) {
                Instrument::where('id', $request->instrument_id)->update($data);
                return redirect('admin/instruments/list')->with('success', 'Instrument Updated Successfully!');
            } else {
                Instrument::create($data);
                return redirect('admin/instruments/list')->with('success', 'Instrument Added Successfully!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteInstrument($id)
    {
        try {
            Instrument::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Instrument Deleted Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
