<table cellspacing="1" border="1">
    <tr>
        <th>
            Product Image
        </th>
        <th>
            Name
        </th>
        <th>
            Description
        </th>
        <th>
            Price
        </th>
    </tr>
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