<tr>
<td class="header">
<a href="http://127.0.0.1:8000/" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/logonovoar.png') }}" class="" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
