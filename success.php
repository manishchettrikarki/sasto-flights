<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/invoice.css">
</head>
<body>
    
<div class="invoice-3 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner">
                    <div class="invoice-info" id="invoice_wrapper">
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice">
                                        <h4 class="inv-header-1 color-white">Invoice: #943249</h4>
                                    </div>
                                    <div class="informeshon">
                                        <p class="inv-title-1">Details</p>
                                        <p class="inv-title-1">KTM-AUH</p>
                                        <p>Flight Data: Aug 31, 2020</p>
                                        <p>Invoice Data: Aug 27, 2020</p>
                                        <p>Invoice to: John Doe</p>
                                        <p>Email: John@Doe.com</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-name text-end">
                                        <div class="logo">
                                            <img class="logo" src="assets/images/logo.png" alt="logo">
                                        </div>
                                        <p>Sasto Flights</p>
                                        <p class="mb-0">Gauridhara Street, Kathmandu, Nepal</p>
                                        <p class="mb-0">Telephone: 02-145-235698</p>
                                        <p class="mb-0">info@sastoflights.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-section table-responsive clearfix">
                                <table class="table caption-top invoice-table">
                                    <thead class="bg-active">
                                    <tr>
                                        <th>Passenger Type</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Totals</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="item-desc-1">
                                                <span>ADT</span>
                                                <small>John Doe</small>
                                            </div>
                                        </td>
                                        <td class="text-center">$400</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$400</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="item-desc-1">
                                                <span>Child</span>
                                                <small>John Doe Jr.</small>
                                            </div>
                                        </td>
                                        <td class="text-center">$100.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end">SubTotal</td>
                                        <td class="text-right">$500</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end">Tax</td>
                                        <td class="text-right">$150</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end fw-bold">Grand Total</td>
                                        <td class="text-right fw-bold">$650</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="bank-transfer">
                                        <h3 class="inv-title-1">Bank Transfer</h3>
                                        <ul class="bank-transfer-list-1">
                                        <li><strong>Bank Name:</strong>John Doe</li>
                                            <li><strong>Account Name:</strong>John Doe</li>
                                            <li><strong>Account Number:</strong>1234567890934</li>
                                            <li><strong>Code:</strong>BARC0032UK</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="note mt-3">
                                <p class="text-muted">We really appreciate your business and if there's anything else we can do, please let us know! Also, should you need us to add VAT or anything else to this order!</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" class="btn btn-lg btn-download">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/jspdf.min.js"></script>
<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/invoice.js"></script>
</body>

</html>