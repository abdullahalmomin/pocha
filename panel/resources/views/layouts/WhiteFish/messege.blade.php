@if($errors->any())
    @if($errors->any())
        <ul class="alert alert-danger fade in animated slideInRight alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close"><i  class="fa fa-times" aria-hidden="true"></i></a>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endif
{{--set some message after action--}}
@if (Session::has('message'))
    <script type="text/javascript">
    $(window).on("load",function(){
        window.setTimeout(function(){
            $.toast({
                heading: '{{ Session::get("message") }}',
                text: '',
                position: 'bottom-left',
                loaderBg:'#f8b32d',
                icon: '',
                hideAfter: 15000, 
                stack: 6
            });
        }, 1000);
    });
    </script>
@endif