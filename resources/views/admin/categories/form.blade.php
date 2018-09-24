<?php $title = isset($item) ? $item->name: "add new article" ?>
{!! Form::myInput('text', 'name', 'Name', ['required']) !!}
{!! Form::mySelect('parent_id', 'Article', [0 => 'root'] + App\Category::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
