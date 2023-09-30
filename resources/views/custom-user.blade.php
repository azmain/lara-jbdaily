<table class="table table-striped table-hover table-reflow">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nam
            </th>
            <th>
                Act
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $value)
        <tr>
            <td > {{ $value['id'] }}: </td>
            <td>  {{ $value['name'] }} </td>
        </tr>
        @endforeach
    </tbody>
    
</table>