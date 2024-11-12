

<div>
    <input id="{{ $trixId }}" type="hidden" name="content" value="{{ $value }}">
    <trix-editor input="{{ $trixId }}"></trix-editor>
</div>

<script>
    var trixEditor = document.getElementById("{{ $trixId }}")

    addEventListener("trix-blur", function(event) {
        console.log(trixEditor.getAttribute('value'));
        @this.set('value', trixEditor.getAttribute('value'))
    })
</script>