<table>
    @foreach ($cartItems->items as $item)
        <tr>
            <td>
                <img src="{{$item['data']['image']}}" alt="{{$item['data']['description']}}" height="250" />
            </td>
            <td>
                {{$item['data']['name']}}
            </td>
            <td>
                {{$item['data']['description']}}
            </td>
            <td>
                    {{$item['data']['price']}}
            </td>
        </tr>
    @endforeach
</table>