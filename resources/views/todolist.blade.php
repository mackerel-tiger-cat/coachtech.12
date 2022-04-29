<tbody>
    @foreach ($todos as $todo)
    <tr>
      <td>{{ $todo->content }}</td>
      <td>{{ $todo->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
<!--リストが表示されるか検証するためのview-->
