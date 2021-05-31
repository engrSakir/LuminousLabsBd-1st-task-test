<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
    <style>
        .input-group {
            border-style: solid;
            border-width: 2px;
            border-color: #fe9854;
            border-radius: 5px;
        }
        .input-group .input-group-addon{
            background: #fd6500;
        }

        .input-group .input-group-addon i{
            color: #ffffff;
        }
    </style>
    <!-- Your html goes here -->
    <div class='panel panel-default'>
        <div class='panel-heading'>Edit Form</div>
        <div class='panel-body'>
            <form method='post' action='{{CRUDBooster::mainpath('edit-save/'.$row->id)}}'>
                @csrf
                <div class="box-body" id="parent-form-area">
                    <!--Line One-->
                    <div class="row">
                        <div class="col-md-6 col-xl-6 form-group header-group-0" id="form-group-customer_full_name" style="">
                            <b title="This field is required">Customer Full Name <span class="text-danger" >*</span></b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" title="Customer Full Name" required="" maxlength="255" class="form-control" name="customer_full_name" id="customer_full_name" value="{{ $row->customer_full_name }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-6 col-xl-6 form-group header-group-0" id="form-group-street" style="">
                            <b title="This field is required">Street<span class="text-danger" >*</span></b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <textarea cols="30" rows="2" title="Street" required="" maxlength="255" class="form-control" name="street" id="street">{{ $row->street }}</textarea>
                            </div>
                        </div>
                    </div>
                    <!--Line Two-->
                    <div class="row">
                        <div class="col-md-6 form-group header-group-0" id="form-group-company_name" style="">
                            <b>Company Name</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                <input type="text" title="Company Name" maxlength="255" class="form-control" name="company_name" id="company_name" value="{{ $row->company_name }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-3 form-group header-group-0" id="form-group-city" style="">
                            <b title="This field is required">City <span class="text-danger">*</span></b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                <input type="text" title="City" required="" maxlength="255" class="form-control" name="city" id="city" value="{{ $row->city }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-3 form-group header-group-0" id="form-group-zip_code" style="">
                            <b>Zip Code</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="text" title="Zip Code" maxlength="255" class="form-control" name="zip_code" id="zip_code" value="{{ $row->zip_code }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <!--Line Three-->
                    <div class="row">
                        <div class="col-md-3 form-group header-group-0" id="form-group-vat_number" style="">
                            <b>Vat Number</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                                <input type="text" title="Vat Number" maxlength="255" class="form-control" name="vat_number" id="vat_number" value="{{ $row->vat_number }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-3 form-group header-group-0" id="form-group-phone_number" style="">
                           <b> Phone Number</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" title="Phone Number" placeholder="" class="form-control" name="phone_number" id="phone_number" value="{{ $row->phone_number }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-3 form-group header-group-0" id="form-group-default_language" style="">
                            <b title="This field is required">Default Language <span class="text-danger" >*</span></b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-language"></i></span>
                                <select title="Default Language" required="" class="form-control" name="default_language" id="default_language">
                                    <option value="French" @if($row->default_language == 'French') selected @endif>French</option>
                                    <option value="English" @if($row->default_language == 'Hindi') selected @endif>Hindi</option>
                                </select>
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-3 form-group header-group-0" id="form-group-country" style="">
                            <b title="This field is required">Country <span class="text-danger" >*</span></b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                <select title="Country" required="" class="form-control" name="country" id="country">
                                    <option value="Germany" @if($row->country == 'Germany') selected @endif>Germany</option>
                                    <option value="India" @if($row->country == 'India') selected @endif>India</option>
                                </select>
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <!--Line Four-->
                    <div class="row">
                        <div class="col-md-6 form-group header-group-0" id="form-group-website" style="">
                           <b>Website</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                <input type="text" title="Website" maxlength="255" class="form-control" name="website" id="website" value="{{ $row->website }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-6 form-group header-group-0" id="form-group-customer_tags" style="">
                            <b> Customer Tags</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" title="Customer Tags" maxlength="255" class="form-control" name="customer_tags" id="customer_tags" value="{{ $row->customer_tags }}">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <!--Line Five-->
                   <div class="row">
                       <div class="col-md-3 form-group header-group-0" id="form-group-email" style="">
                           <b title="This field is required">Email <span class="text-danger" >*</span></b>
                           <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                               <input type="email" name="email" style="display: none">
                               <input type="email" title="Email" required="" placeholder="" maxlength="255" class="form-control" name="email" id="email" value="{{ $row->email }}">
                           </div>
                           <div class="text-danger"></div>
                           <p class="help-block"></p>
                       </div>
                       <div class="col-md-3 form-group header-group-0" id="form-group-currency" style="">
                           <b title="This field is required">Currency <span class="text-danger">*</span></b>
                           <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-money"></i></span>
                               <select title="Currency" required="" class="form-control" name="currency" id="currency">
                                   <option value="EUR" @if($row->default_language == 'EIR') selected @endif>EUR</option>
                                   <option value="INR" @if($row->default_language == 'INR') selected @endif>INR</option>
                               </select>
                           </div>
                           <div class="text-danger"></div>
                           <p class="help-block"></p>
                       </div>
                   </div>

                    <div class='panel panel-default'>
                        <div class="panel-heading" style="height:45px;">
                            <div class="col-md-6" style="">
                                <b>Shipping Info</b>
                            </div>
                            <div class="col-md-6" style="text-align:right;">
                                <input type="checkbox" id="same_as_customer_address" name="same_as_customer_address">&nbsp;<label for="same_as_customer_address">Same as Customer Address</label>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <div class="box-body"  id="shipping-info-area">
                                <!--Line Six-->
                                <div class="row">
                                    <div class="col-md-4 form-group header-group-0" id="form-group-shipping_customer_full_name" style="">
                                        <b title="This field is required">Customer Full Name <span class="text-danger" >*</span></b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" title="Shipping Customer Full Name" required="" maxlength="255" class="form-control" name="shipping_customer_full_name" id="shipping_customer_full_name" value="{{ $row->shipping_customer_full_name }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-shipping_company_name" style="">
                                        <b>Company Name</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                            <input type="text" title="Shipping Company Name" maxlength="255" class="form-control" name="shipping_company_name" id="shipping_company_name" value="{{ $row->shipping_company_name }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-shipping_street" style="">
                                        <b>Street</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                            <input type="text" title="Shipping Street" maxlength="255" class="form-control" name="shipping_street" id="shipping_street" value="{{ $row->shipping_street }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <!--Line Seven-->
                                <div class="row">
                                    <div class="col-md-4 form-group header-group-0" id="form-group-shipping_city" style="">
                                        <b>City</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                            <input type="text" title="Shipping City" maxlength="255" class="form-control" name="shipping_city" id="shipping_city" value="{{ $row->shipping_city }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-shipping_zip_code" style="">
                                        <b>Zip Code</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                            <input type="text" title="Shipping Zip Code" maxlength="255" class="form-control" name="shipping_zip_code" id="shipping_zip_code" value="{{ $row->shipping_zip_code }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-shipping_country" style="">
                                        <b>Country</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                            <select title="Shipping Country" class="form-control" name="shipping_country" id="shipping_country">
                                                <option value="Austria" @if($row->default_language == 'Austria') selected @endif>Austria</option>
                                                <option value="India" @if($row->default_language == 'India') selected @endif>India</option>
                                            </select>
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class="panel-heading" style="height:45px;">
                            <div class="col-md-6" style="">
                                <b>Billing Info</b>
                            </div>
                            <div class="col-md-6" style="text-align:right;">
                                <input type="checkbox" id="same_as_shipping_address" name="same_as_shipping_address"> &nbsp;<label for="same_as_shipping_address">Same as Shipping Address</label>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <div class="box-body" id="billing-info-area">
                                <!--Line Eight-->
                                <div class="row">
                                    <div class="col-md-4 form-group header-group-0" id="form-group-billing_customer_full_name" style="">
                                        <b title="This field is required">Customer Full Name <span class="text-danger">*</span></b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" title="Billing Customer Full Name" required="" maxlength="255" class="form-control" name="billing_customer_full_name" id="billing_customer_full_name" value="{{ $row->billing_customer_full_name }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-billing_company_name" style="">
                                        <b>Company Name</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                            <input type="text" title="Billing Company Name" maxlength="255" class="form-control" name="billing_company_name" id="billing_company_name" value="{{ $row->billing_company_name }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-billing_street" style="">
                                       <b>Street</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                            <input type="text" title="Billing Street" maxlength="255" class="form-control" name="billing_street" id="billing_street" value="{{ $row->billing_street }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <!--Line Nine-->
                                <div class="row">
                                    <div class="col-md-4 form-group header-group-0" id="form-group-billing_city" style="">
                                        <b> City</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                            <input type="text" title="Billing City" maxlength="255" class="form-control" name="billing_city" id="billing_city" value="{{ $row->billing_city }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-billing_zip_code" style="">
                                       <b>Zip Code</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                            <input type="text" title="Billing Zip Code" maxlength="255" class="form-control" name="billing_zip_code" id="billing_zip_code" value="{{ $row->billing_zip_code }}">
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-md-4 form-group header-group-0" id="form-group-billing_country" style="">
                                       <b>Country</b>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                            <select title="Billing Country" class="form-control" name="billing_country" id="billing_country">
                                                <option value="Austria" @if($row->default_language == 'Austria') selected @endif>Austria</option>
                                                <option value="India" @if($row->default_language == 'India') selected @endif>India</option>
                                            </select>
                                        </div>
                                        <div class="text-danger"></div>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SUBMIT .... -->
                <div class='panel-footer'>
                    <input type='submit' class='btn btn-primary' value='Save changes'/>
                </div>
            </form>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#same_as_customer_address').change(function()
            {
                if ($(this).is(':checked')) {
                    $('#shipping_customer_full_name').val($('#customer_full_name').val());
                    $('#shipping_company_name').val($('#company_name').val());
                    $('#shipping_street').val($('#street').val());
                    $('#shipping_city').val($('#city').val());
                    $('#shipping_zip_code').val($('#zip_code').val());
                    $('#shipping_country').val($('#country').val());
                }
            });

            $('#same_as_shipping_address').change(function()
            {
                if ($(this).is(':checked')) {
                    $('#billing_customer_full_name').val($('#shipping_customer_full_name').val());
                    $('#billing_company_name').val($('#shipping_company_name').val());
                    $('#billing_street').val($('#shipping_street').val());
                    $('#billing_city').val($('#shipping_city').val());
                    $('#billing_zip_code').val($('#shipping_zip_code').val());
                    $('#billing_country').val($('#shipping_country').val());
                }
            });
        });
    </script>
@endsection
