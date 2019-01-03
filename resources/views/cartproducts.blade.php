<table>
    @foreach ($cartItems->items as $item)
        <tr>
            <td>
                <img src="{{$item->image}}" alt="{{$item->description}}" height="250" />
            </td>
            <td>
                {{$item->name}}
            </td>
            <td>
                {{$item->description}}
            </td>
            <td>
                {{$item->price}}
            </td>
        </tr>
    @endforeach
</table>