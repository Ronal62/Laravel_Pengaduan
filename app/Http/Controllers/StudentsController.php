<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)) {
            $dataStudents = Students::where('students.id_students', 'like', '%' . $search . '%')
                ->orWhere('students.full_name', 'like', '%' . $search . '%')
                ->paginate(10)->onEachSide(2)->fragment('std');
        } else {
            $dataStudents = Students::paginate(10)->onEachSide(2)->fragment('std');;
        }
        return view('students.data')->with([
            'students' => $dataStudents,
            'search' => $search
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {
        $validate = $request->validated();

        $students = new Students;
        $students->id_students = $request->txtid;
        $students->full_name = $request->txtfull_name;
        $students->address = $request->txtaddress;
        $students->gender = $request->txtgender;
        $students->phone = $request->txtphone;
        $students->email = $request->txtemail;
        $students->save();

        return  redirect('students')->with('msg', 'Add new students Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students, $id_students)
    {
        $data = $students->find($id_students);
        return view('students.formedit')->with([
            'txtid' => $id_students,
            'txtfull_name' => $data->full_name,
            'txtaddress' => $data->address,
            'txtemail' => $data->email,
            'txtphone' => $data->phone,
            'txtgender' => $data->gender,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students, $id_students)
    {
        $data = $students->find($id_students);
        $data->full_name = $request->txtfull_name;
        $data->address = $request->txtaddress;
        $data->gender = $request->txtgender;
        $data->phone = $request->txtphone;
        $data->email = $request->txtemail;
        $data->save();

        return redirect('students')->with('msg', ' Data dengan nama students' . $data->full_name . ' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students, $id_students)
    {
        $data = $students->find($id_students);
        $data->delete();
        return redirect('students')->with('msg', ' Data dengan nama students' . $data->full_name . ' berhasil dihapus');
    }
}
