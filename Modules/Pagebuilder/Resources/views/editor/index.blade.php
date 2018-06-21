@extends('pagebuilder::layouts.master')

@section('styles')
    <style>
        h2.mce-content-body {
            font-size: 200%;
            padding: 0 25px 0 25px;
            margin: 10px 0 10px 0;
        }

        body {
            background: transparent;
        }

        .content {
            overflow: visible;
            position: relative;
            width: auto;
            margin-left: 0;
            min-height: auto;
            padding: inherit;
        }
    </style>
@stop
@section('scripts_header')
<script src="{{asset('plugins/vendor/tinymce/js/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
<script>
    tinymce.init({
        selector: 'h2.editable',
        inline: true,
        toolbar: 'undo redo',
        menubar: false
    });

    tinymce.init({
        selector: 'div.editable',
        inline: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });
</script>
@stop
@section('General')

    <h2 class="editable">Editable header</h2>

    <div class="editable">
        <h2><img title="TinyMCE Logo" src="//www.tinymce.com/images/glyph-tinymce@2x.png" alt="TinyMCE Logo" width="110" height="97" style="float: right"/>TinyMCE Inline Mode</h2>
        <p>
            This is an editable div element.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt est ac dolor condimentum vitae laoreet ante accumsan. Nullam tincidunt tincidunt ante tempus commodo. Duis rutrum, magna non lacinia tincidunt, risus lacus tempus ipsum, sit amet euismod justo metus ut metus. Donec feugiat urna non leo laoreet in tincidunt lectus gravida. Sed semper ante sed dui consectetur eget commodo eros imperdiet. Mauris magna diam, scelerisque at ornare vel, dignissim ac sem. Fusce id congue lacus. Duis sit amet tellus erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus mattis facilisis pretium. In in nibh eu urna ornare semper. Sed imperdiet felis vitae nibh sagittis eu pulvinar metus facilisis. Sed dolor orci, aliquet sagittis auctor id, faucibus at justo.
        </p>
        <p>
            Vestibulum vestibulum velit nec magna lobortis elementum. Ut egestas ultrices tincidunt. Sed vestibulum mi vitae dui interdum eget rhoncus neque faucibus. Ut nec leo tellus. Nunc in metus sit amet purus bibendum dignissim pulvinar quis erat. Quisque vel ultricies nisi. Vestibulum eu ante risus. In ultrices dignissim massa, vel luctus dui consequat quis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dui nulla, venenatis at porttitor nec, sagittis et urna. Nulla facilisi. Integer bibendum porta urna porta suscipit. In condimentum quam quis justo accumsan molestie. Fusce accumsan vulputate mattis. Sed pharetra volutpat erat at convallis. Etiam tempus, est ac tincidunt scelerisque, mi elit pretium nulla, sit amet viverra nisl enim id lorem. Suspendisse ut enim ullamcorper tellus eleifend sagittis. Aenean mollis turpis eu nisl viverra laoreet. Mauris ante purus, tempor ut viverra eu, vestibulum eget tellus. Morbi vitae dolor tellus. Mauris sodales rutrum nunc, a imperdiet augue egestas vel. Nulla facilisi. Nulla venenatis tristique nisi ut blandit. Phasellus suscipit arcu adipiscing velit posuere nec lacinia urna mattis.
        </p>
        <p>
            Nulla ullamcorper magna sit amet leo porta blandit. Aliquam sed nulla ac arcu vehicula feugiat. Fusce eget accumsan dui. Vestibulum vel leo tellus. Sed dignissim justo in nunc interdum tempor vehicula neque egestas. Fusce lacinia turpis sit amet leo consequat laoreet. Cras nec erat ac purus volutpat consequat. Vestibulum iaculis tincidunt purus eget blandit. Cras consectetur tellus libero. Vestibulum eros orci, volutpat vitae lobortis sit amet, porta quis felis. In a lacus ac neque luctus mollis. Nulla elementum nunc ac ante porttitor id venenatis augue venenatis. In aliquam magna non dolor convallis consequat.
        </p>
    </div>
@stop
@section('scripts')

@stop