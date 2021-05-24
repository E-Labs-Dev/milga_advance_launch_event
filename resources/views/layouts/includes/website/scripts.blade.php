
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/intlTelInput.js')}}"></script>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "/js/utils.js",
    });
</script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.1/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.15.1/dist/jquery.validate.min.js"></script>

