<table>
    <thead>
        <tr>
            <th>Имя</th>
            <!-- Добавьте заголовки для других полей -->
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <!-- Вывод других полей -->
            </tr>
        @endforeach
    </tbody>
</table>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

