<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use PDF; // Use the PDF facade
use Auth;

class ReportController extends Controller
{
    public function report1(Request $request)
    {
        // กำหนดค่า $pid จาก request ของ HTTP
        $pid = $request->pid;

        // ตรวจสอบว่า $pid มีค่าหรือไม่ ถ้าไม่มีให้คืนค่าว่าง
        if (is_null($pid)) {
            return redirect()->back()->with('error', 'Payment ID is required.');
        }

        // ค้นหาข้อมูลการชำระเงินโดยใช้ $pid จากฐานข้อมูล
        $payment = Payment::find($pid);

        // ตรวจสอบว่าพบข้อมูลการชำระเงินหรือไม่
        if (!$payment) {
            return redirect()->back()->with('error', 'Payment not found.');
        }

        // สร้าง PDF content
        $print = "<div style='margin:20px; padding: 20px;'>";
        $print .= "<h1 align='center'> Payment Receipt </h1>";
        $print .= "<hr/>";
        $print .= "<p> Receipt No: <b>". $pid . "</b> </p>";
        $print .= "<p> Date : <b>" . $payment->paid_date . "</b></p>";
        $print .= "<p> Enrollment No : <b>". $payment->enrollment->enroll_no . "</b></p>";
        $print .= "<p> Student Name : <b>" . $payment->enrollment->student->name . "</b></p>";
        $print .= "<hr/>";
        $print .= "<table style='width: 100%;'>";
        $print .= "<tr><td>Description</td><td>Amount</td></tr>";
        $print .= "<tr><td> <h3>" . $payment->enrollment->batch->name . "</h3></td>";
        $print .= "<td> <h3>" . $payment->amount . "</h3> </td></tr>";
        $print .= "</table>";
        $print .= "<hr/>";
        $print .= "<p> Student Name : <b>" . $payment->enrollment->student->name . "</b></p>";
        $print .= "<span> Printed Date: <b>" . date('Y-m-d') . "</b> </span>";
        $print .= "</div>";
        $print .= "<br><br>"; // เพิ่ม 2 บรรทัดใหม่
        $print .= "<p style='margin:20px; padding: 20px; text-align: right;'> HR-Name: <span style='display: inline-block; width: 250px; border-bottom: 1px solid black;'> </span></p>";
        $print .= "<p style='margin:20px; padding: 20px; text-align: right;'> Approve-Date: <span style='display: inline-block; width: 250px; border-bottom: 1px solid black;'> </span></p>";


        // Generate PDF
        $pdf = PDF::loadHTML($print);
        return $pdf->stream();
    }
}
