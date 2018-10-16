<ul {!! $options !!}>
    @foreach ($object as $key => $row)
        <li>
            <label for="menu_id_{{ $screen }}_{{ $row->id }}" data-title="{{ $row->name }}" data-related-id="{{ $row->id }}"
                   data-type="{{ $screen }}" class="mt-checkbox mt-checkbox-outline">
                {!! Form::checkbox('menu_id', $row->id, null, ['id' => 'menu_id_' . $screen . '_' . $row->id]) !!}
                <span></span>
                <span class="text">{{ $row->name }}</span>
            </label>

            @if (Schema::hasColumn($model->getTable(), 'parent_id'))
                {!!
                    Menu::generateSelect([
                        'model' => $model,
                        'screen' => $screen,
                        'parent_id' => $row->id
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul>
