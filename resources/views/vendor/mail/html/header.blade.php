<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://www.rapidopark.com.br/wp-content/uploads/2022/02/logo.png" class="logo" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
