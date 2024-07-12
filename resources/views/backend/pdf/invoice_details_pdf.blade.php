@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Customer Payment Report</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                <li class="breadcrumb-item active">Customer Payment Report</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        <h4 class="float-end font-size-16"><strong>Invoice No #
                                                {{ $payment['invoice']['invoice_no'] }}</strong></h4>
                                        <h3>
                                            <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo"
                                                height="24" /> Demo Hardware Store
                                        </h3>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <address>
                                                <strong>Demo Hardware Store:</strong><br>
                                                Demo Location Address<br>
                                                support@techfinitysoftwares.com
                                            </address>
                                        </div>
                                        <div class="col-6 mt-4 text-end">
                                            <address>
                                                <strong>Invoice Date:</strong><br>
                                                {{ date('d-m-Y', strtotime($payment['invoice']['date'])) }}<br><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="p-2">
                                        <h3 class="font-size-16"><strong>Customer Invoice</strong></h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><strong>Customer Name</strong></th>
                                                    <th class="text-center"><strong>Customer Mobile</strong></th>
                                                    <th class="text-center"><strong>Address</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $payment['customer']['name'] }}</td>
                                                    <td class="text-center">{{ $payment['customer']['mobile_no'] }}</td>
                                                    <td class="text-center">{{ $payment['customer']['email'] }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><strong>Sl</strong></th>
                                                    <th class="text-center"><strong>Category</strong></th>
                                                    <th class="text-center"><strong>Product Name</strong></th>
                                                    <th class="text-center"><strong>Quantity</strong></th>
                                                    <th class="text-center"><strong>Unit Price</strong></th>
                                                    <th class="text-center"><strong>Total Price</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $total_sum = 0;
                                                    $invoice_details = App\Models\InvoiceDetail::where(
                                                        'invoice_id',
                                                        $payment->invoice_id,
                                                    )->get();
                                                @endphp
                                                @foreach ($invoice_details as $key => $details)
                                                    <tr>
                                                        <td class="text-center">{{ $key + 1 }}</td>
                                                        <td class="text-center">{{ $details['category']['name'] }}</td>
                                                        <td class="text-center">{{ $details['product']['name'] }}</td>
                                                        <td class="text-center">{{ $details->selling_qty }}</td>
                                                        <td class="text-center">{{ $details->unit_price }}</td>
                                                        <td class="text-center">{{ $details->selling_price }}</td>
                                                    </tr>
                                                    @php
                                                        $total_sum += $details->selling_price;
                                                    @endphp
                                                @endforeach
                                                <tr>
                                                    <td colspan="5" class="thick-line text-end"><strong>Subtotal</strong>
                                                    </td>
                                                    <td class="thick-line text-end">Ksh {{ $total_sum }}</td>
                                                </tr>
                                                @if ($payment->discount_amount > 0)
                                                    <tr>
                                                        <td colspan="5" class="no-line text-end"><strong>Discount
                                                                Amount</strong></td>
                                                        <td class="no-line text-end">Ksh {{ $payment->discount_amount }}
                                                        </td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td colspan="5" class="no-line text-end"><strong>Paid Amount</strong>
                                                    </td>
                                                    <td class="no-line text-end">Ksh {{ $payment->paid_amount }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="no-line text-end"><strong>Due Amount</strong>
                                                    </td>
                                                    <td class="no-line text-end">Ksh {{ $payment->due_amount }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="no-line text-end"><strong>Grand
                                                            Amount</strong></td>
                                                    <td class="no-line text-end">
                                                        <h4 class="m-0">Ksh {{ $payment->total_amount }}</h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="7" class="text-center font-weight-bold">Payment Summary
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="text-center font-weight-bold">Date</td>
                                                    <td colspan="3" class="text-center font-weight-bold">Amount</td>
                                                </tr>
                                                @php
                                                    $payment_details = App\Models\PaymentDetail::where(
                                                        'invoice_id',
                                                        $payment->invoice_id,
                                                    )->get();
                                                @endphp
                                                @foreach ($payment_details as $item)
                                                    <tr>
                                                        <td colspan="4" class="text-center font-weight-bold">
                                                            {{ date('d-m-Y', strtotime($item->date)) }}</td>
                                                        <td colspan="3" class="text-center font-weight-bold">
                                                            {{ $item->current_paid_amount }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-print-none">
                                        <div class="float-end">
                                            <a href="javascript:window.print()"
                                                class="btn btn-success waves-effect waves-light"><i
                                                    class="fa fa-print"></i></a>
                                            <a href="#"
                                                class="btn btn-primary waves-effect waves-light ms-2">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
