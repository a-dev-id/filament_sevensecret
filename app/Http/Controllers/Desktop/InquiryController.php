<?php

namespace App\Http\Controllers\Desktop;

use App\Http\Controllers\Controller;
use App\Mail\InquiryMail;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inquiry::create([
            'package_title' => $request->package_title,
            'package_excerpt' => $request->package_excerpt,
            'package_price' => $request->package_price,
            'package_per' => $request->package_per,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'date' => $request->date,
            'message' => $request->message,
        ]);

        $mailData = [
            'package_title' => $request->package_title,
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'date' => $request->date,
            'message' => $request->message,
        ];

        Mail::to('reservations@sevensecretsresorts.com', 'inquiry.sevensecrets@gmail.com')
            ->cc([$request->email, 'inquiry.sevensecrets@gmail.com'])
            ->send(new InquiryMail($mailData));

        return redirect()->route('thank-you.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
