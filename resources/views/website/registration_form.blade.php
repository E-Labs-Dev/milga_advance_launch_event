<form action="{{route('registrations.store')}}" method ="POST" name="registration_form">
    @csrf
    <h3>Reserve your Spot</h3>
    <div class="row reserve" >
        <div class="col-lg-6 col-12">
            <label>First Name <span>*</span></label>
            <input type="text" class="form-control" placeholder="Enter first name"  name="first_name" value="{{old('first_name')}}">
        </div><!--col-12-->
        <div class="col-lg-6 col-12">
            <label>Last Name <span>*</span> </label>
            <input type="text" class="form-control" placeholder="Enter last name" required name="last_name" value="{{old('last_name')}}">
        </div><!--col-12-->

        <div class="col-lg-6 col-12">
            <label>Email <span>*</span> </label>
            <input type="email" class="form-control" placeholder="Enter email address" required name="email" value="{{old('email')}}">
        </div><!--col-12-->
        <div class="col-lg-6 col-12">
            <label>Mobile Number  <span>*</span> </label>
            <input  class="form-control" placeholder="Enter mobile number" type="tel" required  id="phone" name="phone"  value="{{old('phone')}}">
        </div><!--col-12-->
        <div class="col-lg-6 col-12">
            <label>Choose the venue <span>*</span> </label>
            <select name="venue" required>
                <option value=""></option>
                <option value="30.7.2021 in Nile Ritz – Cairo" @if (old('venue') == '30.7.2021 in Nile Ritz – Cairo') selected @endif>30.7.2021 in Nile Ritz – Cairo</option>
                <option value="6.8.2021 in Sunrise – Alex" @if (old('venue') == '6.8.2021 in Sunrise – Alex') selected @endif>6.8.2021 in Sunrise – Alex</option>
            </select>
        </div><!--col-12-->
        <div class="col-lg-6 col-12">
            <label>Choose the Governorates <span>*</span> </label>
            <select name="governorate" required>
                <option value=""></option>
                <option value="Matruh" @if (old('governorate') == 'Matruh') selected @endif>Matruh</option>
                <option value="Alexandria" @if (old('governorate') == 'Alexandria') selected @endif>Alexandria</option>
                <option value="Beheira" @if (old('governorate') == 'Beheira') selected @endif>Beheira</option>
                <option value="Kafr El Sheikh" @if (old('governorate') == 'Kafr El Sheikh') selected @endif>Kafr El Sheikh</option>
                <option value="Dakahlia" @if (old('governorate') == 'Dakahlia') selected @endif>Dakahlia</option>
                <option value="Damietta" @if (old('governorate') == 'Damietta') selected @endif>Damietta</option>
                <option value="Port Said" @if (old('governorate') == 'Port Said') selected @endif>Port Said</option>
                <option value="North Sinai" @if (old('governorate') == 'North Sinai') selected @endif>North Sinai</option>
                <option value="Gharbia" @if (old('governorate') == 'Gharbia') selected @endif>Gharbia</option>
                <option value="Monufia" @if (old('governorate') == 'Monufia') selected @endif>Monufia</option>
                <option value="Qalyubia" @if (old('governorate') == 'Qalyubia') selected @endif>Qalyubia</option>
                <option value="Sharqia" @if (old('governorate') == 'Sharqia') selected @endif>Sharqia</option>
                <option value="Ismailia" @if (old('governorate') == 'Ismailia') selected @endif>Ismailia</option>
                <option value="Giza" @if (old('governorate') == 'Giza') selected @endif>Giza</option>
                <option value="Faiyum" @if (old('governorate') == 'Faiyum') selected @endif>Faiyum</option>
                <option value="Cairo" @if (old('governorate') == 'Cairo') selected @endif>Cairo</option>
                <option value="Suez" @if (old('governorate') == 'Suez') selected @endif>Suez</option>
                <option value="South Sinai" @if (old('governorate') == 'South Sinai') selected @endif>South Sinai</option>
                <option value="Beni Suef" @if (old('governorate') == 'Beni Suef') selected @endif>Beni Suef</option>
                <option value="Minya" @if (old('governorate') == 'Minya') selected @endif>Minya</option>
                <option value="New Valley" @if (old('governorate') == 'New Valley') selected @endif>New Valley</option>
                <option value="Asyut" @if (old('governorate') == 'Asyut') selected @endif>Asyut</option>
                <option value="Red Sea" @if (old('governorate') == 'Red Sea') selected @endif>Red Sea</option>
                <option value="Sohag" @if (old('governorate') == 'Sohag') selected @endif>Sohag</option>
                <option value="Qena" @if (old('governorate') == 'Qena') selected @endif>Qena</option>
                <option value="Aswan" @if (old('governorate') == 'Aswan') selected @endif>Aswan</option>
                <option value="Luxor" @if (old('governorate') == 'Luxor') selected @endif>Luxor</option>
            </select>
        </div><!--col-12-->
        <div class=" col-12">
            <div class="send">
                <button type="submit">Submit <img src="{{asset('images/arrow.png')}}"></button>

            </div>
        </div><!--col-12-->
    </div><!--row-->
</form>
