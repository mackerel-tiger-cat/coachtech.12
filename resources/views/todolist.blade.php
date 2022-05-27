<tbody>
    @foreach ($todos as $todo)
    <tr>
      <td>{{ $todo->content }}</td>
      <td>{{ $todo->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
