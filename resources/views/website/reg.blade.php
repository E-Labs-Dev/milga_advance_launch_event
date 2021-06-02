{{ Form::open(['route' => 'registrations.store','method'=>'POST','name'=>'registration_form'])}}
<div class="row reserve" >

    <div class="col-lg-6 col-12">
        <label>First Name <span>*</span></label>
        <input type="text" class="form-control" placeholder="Enter first name"  required name="first_name" >
    </div><!--col-12-->
    <div class="col-lg-6 col-12">
        <label>Last Name <span>*</span> </label>
        <input type="text" class="form-control" placeholder="Enter last name" required name="last_name" >
    </div><!--col-12-->

    <div class="col-lg-6 col-12">
        <label>Email <span>*</span> </label>
        <input type="email" class="form-control" placeholder="Enter email address" required name="email" >
    </div><!--col-12-->
    <div class="col-lg-6 col-12">
        <label>Mobile Number  <span>*</span> </label>
        <input  class="form-control" placeholder="Enter mobile number"  id="phone-registration"  type="tel" required  >
        <input type="hidden" name="phone" id="full_phone">
        <span id="error-msg-registration" class="hide"></span>
    </div><!--col-12-->
    <div class="col-lg-6 col-12">
        <label>Choose the Governorate <span>*</span> </label>
        <select name="governorate" required>
            <option value=""></option>
            <option value="Matruh">Matruh</option>
            <option value="Alexandria">Alexandria</option>
            <option value="Beheira" >Beheira</option>
            <option value="Kafr El Sheikh" >Kafr El Sheikh</option>
            <option value="Dakahlia" >Dakahlia</option>
            <option value="Damietta" >Damietta</option>
            <option value="Port Said">Port Said</option>
            <option value="North Sinai" >North Sinai</option>
            <option value="Gharbia">Gharbia</option>
            <option value="Monufia">Monufia</option>
            <option value="Qalyubia">Qalyubia</option>
            <option value="Sharqia">Sharqia</option>
            <option value="Ismailia">Ismailia</option>
            <option value="Giza">Giza</option>
            <option value="Faiyum">Faiyum</option>
            <option value="Cairo">Cairo</option>
            <option value="Suez">Suez</option>
            <option value="South Sinai" >South Sinai</option>
            <option value="Beni Suef">Beni Suef</option>
            <option value="Minya">Minya</option>
            <option value="New Valley">New Valley</option>
            <option value="Asyut">Asyut</option>
            <option value="Red Sea">Red Sea</option>
            <option value="Sohag">Sohag</option>
            <option value="Qena">Qena</option>
            <option value="Aswan">Aswan</option>
            <option value="Luxor">Luxor</option>
        </select>
    </div><!--col-12-->
    <div class="col-lg-6 col-12">
        <label>Choose the Venue <span>*</span> </label>
        <select name="venue" required>
            <option value=""></option>
            <option value="30.7.2021 in Nile Ritz – Cairo" >30.7.2021 in Nile Ritz – Cairo</option>
            <option value="6.8.2021 in Sunrise – Alex">6.8.2021 in Sunrise – Alex</option>
        </select>
    </div><!--col-12-->
    <div class=" col-12">
        <div class="send">
            <button type="submit" id="registration_form">Submit <img src="{{asset('images/arrow.png')}}"></button>
        </div>
    </div><!--col-12-->


</div><!--row-->
{{Form::close()}}
