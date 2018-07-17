@extends('pagebuilder::layouts.master')

@section('styles')

@stop
@section('scripts_header')
    {{--<link rel=stylesheet href="{{asset('plugins/vendor/codemirror/doc/docs.css')}}">--}}
    <link rel="stylesheet" href="{{asset('plugins/vendor/codemirror/lib/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/vendor/codemirror/addon/display/fullscreen.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/vendor/codemirror/theme/darcula.css')}}">

    <script src="{{asset('plugins/vendor/codemirror/lib/codemirror.js')}}"></script>
    <script src="{{asset('plugins/vendor/codemirror/mode/xml/xml.js')}}"></script>
    <script src="{{asset('plugins/vendor/codemirror/addon/display/fullscreen.js')}}"></script>

@stop
@section('General')

    <article>

        <form>
            <textarea id="code" name="code" rows="10">
{{$customSetting->custom_css}}

        </textarea>
        </form>
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                theme: "darcula",
                extraKeys: {
                    "F11": function (cm) {
                        cm.setOption("fullScreen", !cm.getOption("fullScreen"));
                    },
                    "Esc": function (cm) {
                        if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
                    }
                }
            });
        </script>

        <p>Demonstration of
            the <a href="../doc/manual.html#addon_fullscreen">fullscreen</a>
            addon. Press <strong>F11</strong> when cursor is in the editor to
            toggle full screen editing. <strong>Esc</strong> can also be used
            to <i>exit</i> full screen editing.</p>
    </article>
    <a href="{{route("css_codeeditor_setting",Auth::id())}}" class="btn btn-info">Editor settings</a>
    <button id="submit" class="btn btn-success">Save</button>

@stop
@section('scripts')
    <script>
        var token = '{{\Illuminate\Support\Facades\Session::token()}}';
        var url = '{{ route('ajax_custom_css_update') }}';
        $('#submit').click(function () {
            var customCssContent=editor.getValue();


            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    customCssContent: customCssContent,
                    _token: token
                },
                success: function (data) {
                    if (data['result'] === "success") {
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            text: 'Custom CSS was updated!'
                        }).show();
                    }
                }
            });



        });
    </script>
@stop