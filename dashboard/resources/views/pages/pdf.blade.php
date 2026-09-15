<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $globalSetting->company_name ?? 'Bluemoon Crackers' }} - Estimate</title>
    <link rel="icon" href="{{ $globalSetting && $globalSetting->favicon ? asset($globalSetting->favicon) : asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333333;
            margin: 0;
            padding: 20px 0;
        }

        .quotation-container {
            width: 850px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        /* Invoice Header */
        .invoice-header {
            background: linear-gradient(135deg, #1e244d 0%, #2d356b 100%);
            color: #ffffff;
            padding: 14px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-logo img {
            height: 40px;
            width: auto;
            filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.3));
        }
        .invoice-title-box {
            text-align: right;
        }
        .invoice-title-box h1 {
            font-size: 22px;
            font-weight: 800;
            margin: 0;
            color: #ffffff;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .invoice-title-box .badge-estimate {
            background: #e25d26;
            color: #ffffff;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 10px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 3px;
            letter-spacing: 0.5px;
        }

        /* Invoice Body */
        .invoice-body {
            padding: 16px 24px;
        }

        /* Meta Bar (Invoice No & Date) */
        .invoice-meta-bar {
            display: flex;
            justify-content: space-between;
            background: #f8fafc;
            border-radius: 8px;
            padding: 8px 16px;
            border: 1px solid #e2e8f0;
            margin-bottom: 12px;
        }
        .meta-item {
            display: flex;
            flex-direction: column;
        }
        .meta-item .meta-label {
            font-size: 10px;
            font-weight: 700;
            color: #8892b3;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .meta-item .meta-value {
            font-size: 13px;
            font-weight: 800;
            color: #2d356b;
            margin-top: 1px;
        }

        /* Address Section */
        .address-grid {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 12px;
        }
        .address-card {
            flex: 1;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 10px 14px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.02);
        }
        .address-card-header {
            font-size: 11px;
            font-weight: 800;
            color: #e25d26;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 4px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .address-card p {
            margin: 0;
            font-size: 12px;
            line-height: 1.35;
            color: #475569;
        }
        .address-card p.customer-name {
            font-weight: 700;
            color: #1e244d;
            font-size: 13px;
            margin-bottom: 2px;
        }

        /* Table Styling - Compact rows and padding */
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid #cbd5e1;
        }
        .invoice-table thead th {
            background: #2d356b;
            color: #ffffff;
            font-size: 11px;
            font-weight: 700;
            padding: 6px 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
            line-height: 1.2;
        }
        .invoice-table tbody td {
            padding: 4px 8px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 11px;
            color: #334155;
            vertical-align: middle;
            line-height: 1.25;
        }
        .invoice-table tbody tr:last-child td {
            border-bottom: none;
        }
        .invoice-table tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .invoice-table tbody tr:hover {
            background-color: #f1f5f9;
        }

        /* Summary Grid */
        .summary-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 10px;
        }
        .words-box {
            width: 55%;
            background: #fffcf6;
            border: 1px solid #f3c26b;
            border-radius: 8px;
            padding: 8px 14px;
        }
        .words-box .words-label {
            font-size: 11px;
            font-weight: 800;
            color: #c94a15;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }
        .words-box .words-value {
            font-size: 12px;
            font-weight: 700;
            color: #1e244d;
            line-height: 1.3;
        }

        .totals-table {
            width: 40%;
            border-collapse: collapse;
        }
        .totals-table td {
            padding: 4px 10px;
            font-size: 12px;
            color: #475569;
        }
        .totals-table tr.grand-total {
            background: #fff8f5;
            border-radius: 6px;
        }
        .totals-table tr.grand-total td {
            font-size: 14px;
            font-weight: 800;
            color: #e25d26;
            padding: 6px 10px;
        }

        /* Footer & Signature */
        .invoice-footer {
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px dashed #cbd5e1;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
        .footer-note {
            font-size: 10.5px;
            color: #94a3b8;
            max-width: 60%;
            line-height: 1.35;
        }
        .signature-box {
            text-align: right;
        }
        .signature-box img {
            height: 30px;
            margin-bottom: 2px;
        }
        .signature-box h5 {
            margin: 0;
            font-size: 12px;
            font-weight: 800;
            color: #2d356b;
        }
        .signature-box span {
            font-size: 10px;
            color: #8892b3;
            font-weight: 600;
        }

        /* Print Button */
        .print_btn {
            position: fixed;
            top: 20px;
            right: 25px;
            background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%);
            padding: 10px 20px;
            border: none;
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(226, 93, 38, 0.4);
            cursor: pointer;
            z-index: 999;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .print_btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(226, 93, 38, 0.5);
        }

        @media print {
            @page {
                size: A4 portrait;
                margin: 6mm 8mm;
            }
            body {
                background: #ffffff;
                padding: 0;
                margin: 0;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            .quotation-container {
                width: 100% !important;
                max-width: 100% !important;
                box-shadow: none;
                border: none;
                border-radius: 0;
                margin: 0;
            }
            .print_btn {
                display: none !important;
            }
            .invoice-table {
                page-break-inside: auto;
                border: 1px solid #cbd5e1 !important;
            }
            .invoice-table thead {
                display: table-header-group;
            }
            .invoice-table tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
            .invoice-table th, .invoice-table td {
                padding: 3px 6px !important;
                font-size: 10px !important;
                line-height: 1.2 !important;
            }
            .summary-container, .invoice-footer {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <button class="print_btn" onclick="window.print()">
        <i class="fa-solid fa-print"></i> Print Invoice
    </button>

    <div class="quotation-container">
        <!-- Header -->
        <header class="invoice-header">
            <div class="header-logo">
                <img src="{{ $globalSetting && $globalSetting->logo ? asset($globalSetting->logo) : asset('assets/images/logo/ram_logo1.png') }}"
                    alt="{{ $globalSetting->company_name ?? 'Bluemoon Crackers' }}">
            </div>
            <div class="invoice-title-box">
                <h1>ESTIMATE</h1>
                <span class="badge-estimate">INVOICE QUOTATION</span>
            </div>
        </header>

        <div class="invoice-body">
            <!-- Meta Bar -->
            <div class="invoice-meta-bar">
                <div class="meta-item">
                    <span class="meta-label">Quotation No</span>
                    <span class="meta-value">#{{ $productord->oeder_id }}</span>
                </div>
                <div class="meta-item" style="text-align: center;">
                    <span class="meta-label">Date</span>
                    <span class="meta-value">{{ date('d M Y', strtotime($productord->created_at)) }}</span>
                </div>
                <div class="meta-item" style="text-align: right;">
                    <span class="meta-label">Payment Status</span>
                    <span class="meta-value" style="color: #e25d26;">Pending Confirmation</span>
                </div>
            </div>

            <!-- Billing Addresses -->
            <div class="address-grid">
                <div class="address-card">
                    <div class="address-card-header">
                        <i class="fa-solid fa-user"></i> Bill To
                    </div>
                    <p class="customer-name">{{ $customer->name }}</p>
                    <p>{{ $customer->address }}</p>
                    <p>{{ $customer->city }}, {{ $customer->state }}</p>
                    <p style="margin-top: 6px; font-weight: 600; color: #2d356b;"><i class="fa-solid fa-phone me-1"></i> {{ $customer->phone_number }}</p>
                </div>
                <div class="address-card">
                    <div class="address-card-header">
                        <i class="fa-solid fa-truck"></i> Ship To
                    </div>
                    <p class="customer-name">{{ $customer->name }}</p>
                    <p>{{ $customer->address }}</p>
                    <p>{{ $customer->city }}, {{ $customer->state }}</p>
                    <p style="margin-top: 6px; font-weight: 600; color: #2d356b;"><i class="fa-solid fa-phone me-1"></i> {{ $customer->phone_number }}</p>
                </div>
            </div>

            <!-- Product Table -->
            <table class="invoice-table">
                <thead>
                    <tr>
                        <th style="width: 8%; text-align: center;">S.NO</th>
                        <th style="text-align: left;">Product Name</th>
                        <th style="width: 15%; text-align: center;">Rate (₹)</th>
                        <th style="width: 12%; text-align: center;">Qty</th>
                        <th style="width: 18%; text-align: right;">Amount (₹)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slot as $prod)
                        @php
                            $total = $prod->product_regular_price * $prod->qty;
                        @endphp
                        <tr>
                            <td style="text-align: center; font-weight: 700;">{{ $loop->iteration }}</td>
                            <td style="font-weight: 600; color: #1e244d;">{{ $prod->product_name }}</td>
                            <td style="text-align: center;">₹{{ number_format($prod->product_regular_price, 2) }}</td>
                            <td style="text-align: center; font-weight: 700;">{{ $prod->qty }}</td>
                            <td style="text-align: right; font-weight: 700; color: #2d356b;">₹{{ number_format($total, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Summary & Totals -->
            <div class="summary-container">
                <div class="words-box">
                    <div class="words-label"><i class="fa-solid fa-coins me-1"></i> Total in Words</div>
                    <div class="words-value">Indian Rupee: <span id="words"></span> Only</div>
                </div>

                <table class="totals-table">
                    <tr>
                        <td style="font-weight: 600;">Sub Total:</td>
                        <td style="text-align: right; font-weight: 700; color: #2d356b;">₹{{ number_format($productord->sub_total, 2) }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;">Packing & Forwarding Charges:</td>
                        <td style="text-align: right; font-weight: 700; color: #16a34a;">₹{{ number_format($productord->shipping, 2) }}</td>
                    </tr>
                    <tr class="grand-total">
                        <td>Total Amount:</td>
                        <td style="text-align: right;">₹{{ number_format($productord->total, 2) }}</td>
                    </tr>
                </table>
            </div>

            <!-- Footer Section -->
            <div class="invoice-footer">
                <div class="footer-note">
                    <strong>Thank you for your business!</strong><br>
                    This Estimate is generated electronically by Bluemoon Crackers. For any queries regarding this quotation, please contact us at orders@bluemooncrackers.com.
                </div>
                <div class="signature-box">
                    <img src="{{ $globalSetting && $globalSetting->logo ? asset($globalSetting->logo) : asset('assets/images/logo/ram_logo1.png') }}" alt="Logo">
                    <h5>{{ $globalSetting->company_name ?? 'Bluemoon Crackers' }}</h5>
                    <span>Authorized Signatory</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        var a = ['', 'One ', 'Two ', 'Three ', 'Four ', 'Five ', 'Six ', 'Seven ', 'Eight ', 'Nine ', 'Ten ', 'Eleven ',
            'Twelve ', 'Thirteen ', 'Fourteen ', 'Fifteen ', 'Sixteen ', 'Seventeen ', 'Eighteen ', 'Nineteen '
        ];
        var b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

        function inWords(num) {
            if ((num = num.toString()).length > 9) return 'overflow';
            n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
            if (!n) return;
            var str = '';
            str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
            str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
            str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
            str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
            str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + ' ' : '';
            return str;
        }

        var a1 = "{{ number_format(round($productord->total), 2, '.', '') }}";
        var len = a1.toString().length;
        len = len - 3;
        var res = a1.substring(0, len);

        document.getElementById('words').innerHTML = inWords(res);
    </script>
</body>

</html>