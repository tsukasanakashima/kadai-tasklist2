{"filter":false,"title":"edit.blade.php","tooltip":"/tasklist/resources/views/tasks/edit.blade.php","undoManager":{"mark":51,"position":51,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- Write content for each page here -->","","@endsection"],"id":1}],[{"start":{"row":6,"column":11},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":5,"column":0},"end":{"row":14,"column":25},"action":"insert","lines":["<h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}"],"id":3}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["e"],"id":4},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["g"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["a"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["s"]},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"remove","lines":["s"]},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"remove","lines":["e"]},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"remove","lines":["m"]}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["t"],"id":5},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["a"]},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["s"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["k"]}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["e"],"id":6},{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"remove","lines":["g"]},{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"remove","lines":["a"]},{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"remove","lines":["s"]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":["s"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["e"]},{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"remove","lines":["m"]}],[{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["t"],"id":7},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"insert","lines":["a"]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["s"]},{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["k"]}],[{"start":{"row":7,"column":47},"end":{"row":7,"column":48},"action":"remove","lines":["e"],"id":8},{"start":{"row":7,"column":46},"end":{"row":7,"column":47},"action":"remove","lines":["g"]},{"start":{"row":7,"column":45},"end":{"row":7,"column":46},"action":"remove","lines":["a"]},{"start":{"row":7,"column":44},"end":{"row":7,"column":45},"action":"remove","lines":["s"]},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"remove","lines":["s"]},{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"remove","lines":["e"]},{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"remove","lines":["m"]}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["t"],"id":9},{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["a"]},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"insert","lines":["s"]},{"start":{"row":7,"column":44},"end":{"row":7,"column":45},"action":"insert","lines":["k"]}],[{"start":{"row":7,"column":63},"end":{"row":7,"column":64},"action":"remove","lines":["e"],"id":10},{"start":{"row":7,"column":62},"end":{"row":7,"column":63},"action":"remove","lines":["g"]},{"start":{"row":7,"column":61},"end":{"row":7,"column":62},"action":"remove","lines":["a"]},{"start":{"row":7,"column":60},"end":{"row":7,"column":61},"action":"remove","lines":["s"]},{"start":{"row":7,"column":59},"end":{"row":7,"column":60},"action":"remove","lines":["s"]},{"start":{"row":7,"column":58},"end":{"row":7,"column":59},"action":"remove","lines":["e"]},{"start":{"row":7,"column":57},"end":{"row":7,"column":58},"action":"remove","lines":["m"]}],[{"start":{"row":7,"column":57},"end":{"row":7,"column":58},"action":"insert","lines":["t"],"id":11},{"start":{"row":7,"column":58},"end":{"row":7,"column":59},"action":"insert","lines":["a"]},{"start":{"row":7,"column":59},"end":{"row":7,"column":60},"action":"insert","lines":["s"]},{"start":{"row":7,"column":60},"end":{"row":7,"column":61},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":[" "],"id":13}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":[" "],"id":14}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":[" "]},{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"insert","lines":[" "]},{"start":{"row":9,"column":2},"end":{"row":9,"column":3},"action":"insert","lines":[" "]},{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"insert","lines":[" "]},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":[" "]},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":[" "]},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":[" "]}],[{"start":{"row":9,"column":7},"end":{"row":10,"column":36},"action":"insert","lines":["{!! Form::label('status', 'ステータス:') !!}","        {!! Form::text('status') !!}"],"id":16}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"remove","lines":["    "],"id":17}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"insert","lines":[" "],"id":18},{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"insert","lines":[" "]},{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":[" "]}],[{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""]},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"insert","lines":[" "],"id":20},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":[" "]}],[{"start":{"row":7,"column":2},"end":{"row":13,"column":10},"action":"insert","lines":["@if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif"],"id":21}],[{"start":{"row":7,"column":2},"end":{"row":13,"column":10},"action":"remove","lines":["@if (count($errors) > 0)","        <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","        </ul>","    @endif"],"id":22}],[{"start":{"row":8,"column":0},"end":{"row":21,"column":25},"action":"remove","lines":["","","    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}","","       {!! Form::label('status', 'ステータス:') !!}","       {!! Form::text('status') !!}","","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}"],"id":23}],[{"start":{"row":7,"column":2},"end":{"row":24,"column":10},"action":"insert","lines":["<div class=\"row\">","        <div class=\"col-xs-6\">","            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"],"id":24}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["e"],"id":25},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"remove","lines":["g"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"remove","lines":["a"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"remove","lines":["s"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"remove","lines":["s"]},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"remove","lines":["e"]},{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"insert","lines":["t"],"id":26},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":["a"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"insert","lines":["s"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":["k"]}],[{"start":{"row":9,"column":55},"end":{"row":9,"column":56},"action":"remove","lines":["e"],"id":27},{"start":{"row":9,"column":54},"end":{"row":9,"column":55},"action":"remove","lines":["g"]},{"start":{"row":9,"column":53},"end":{"row":9,"column":54},"action":"remove","lines":["a"]},{"start":{"row":9,"column":52},"end":{"row":9,"column":53},"action":"remove","lines":["s"]},{"start":{"row":9,"column":51},"end":{"row":9,"column":52},"action":"remove","lines":["s"]},{"start":{"row":9,"column":50},"end":{"row":9,"column":51},"action":"remove","lines":["e"]},{"start":{"row":9,"column":49},"end":{"row":9,"column":50},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":49},"end":{"row":9,"column":50},"action":"insert","lines":["t"],"id":28},{"start":{"row":9,"column":50},"end":{"row":9,"column":51},"action":"insert","lines":["a"]},{"start":{"row":9,"column":51},"end":{"row":9,"column":52},"action":"insert","lines":["s"]},{"start":{"row":9,"column":52},"end":{"row":9,"column":53},"action":"insert","lines":["k"]}],[{"start":{"row":9,"column":70},"end":{"row":9,"column":71},"action":"remove","lines":["g"],"id":29},{"start":{"row":9,"column":69},"end":{"row":9,"column":70},"action":"remove","lines":["a"]},{"start":{"row":9,"column":68},"end":{"row":9,"column":69},"action":"remove","lines":["s"]},{"start":{"row":9,"column":67},"end":{"row":9,"column":68},"action":"remove","lines":["s"]},{"start":{"row":9,"column":66},"end":{"row":9,"column":67},"action":"remove","lines":["e"]}],[{"start":{"row":9,"column":66},"end":{"row":9,"column":67},"action":"remove","lines":["e"],"id":30},{"start":{"row":9,"column":65},"end":{"row":9,"column":66},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":65},"end":{"row":9,"column":66},"action":"insert","lines":["t"],"id":31},{"start":{"row":9,"column":66},"end":{"row":9,"column":67},"action":"insert","lines":["a"]},{"start":{"row":9,"column":67},"end":{"row":9,"column":68},"action":"insert","lines":["s"]},{"start":{"row":9,"column":68},"end":{"row":9,"column":69},"action":"insert","lines":["k"]}],[{"start":{"row":16,"column":48},"end":{"row":16,"column":53},"action":"remove","lines":["メッセージ"],"id":32}],[{"start":{"row":16,"column":48},"end":{"row":16,"column":51},"action":"insert","lines":["タスク"],"id":39}],[{"start":{"row":11,"column":46},"end":{"row":11,"column":50},"action":"remove","lines":["タイトル"],"id":40}],[{"start":{"row":11,"column":46},"end":{"row":11,"column":51},"action":"insert","lines":["ステータス"],"id":51}],[{"start":{"row":11,"column":37},"end":{"row":11,"column":42},"action":"remove","lines":["title"],"id":52}],[{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["s"],"id":53},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"insert","lines":["t"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":["a"]},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"insert","lines":["t"]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"insert","lines":["u"]}],[{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":["s"],"id":54}],[{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"remove","lines":["e"],"id":55},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"remove","lines":["l"]},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"remove","lines":["t"]},{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"remove","lines":["i"]},{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"remove","lines":["t"]}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["s"],"id":56},{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"insert","lines":["t"]},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":["a"]},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"insert","lines":["t"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":["u"]},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"insert","lines":["s"]}],[{"start":{"row":10,"column":16},"end":{"row":14,"column":8},"action":"remove","lines":["<div class=\"form-group\">","                    {!! Form::label('status', 'ステータス:') !!}","                    {!! Form::text('status', null, ['class' => 'form-control']) !!}","                </div>","        "],"id":57}],[{"start":{"row":14,"column":22},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":58},{"start":{"row":15,"column":0},"end":{"row":15,"column":16},"action":"insert","lines":["                "]},{"start":{"row":15,"column":16},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":16,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":16,"column":16},"end":{"row":20,"column":8},"action":"insert","lines":["<div class=\"form-group\">","                    {!! Form::label('status', 'ステータス:') !!}","                    {!! Form::text('status', null, ['class' => 'form-control']) !!}","                </div>","        "],"id":59}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":[">"],"id":60},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["\""]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["6"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["-"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["s"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["x"]},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"remove","lines":["-"]},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["l"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"remove","lines":["o"]},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"remove","lines":["c"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":["\""]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["="]}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["s"],"id":61},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["s"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["a"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["l"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["c"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"remove","lines":[" "]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"remove","lines":["v"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"remove","lines":["i"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"remove","lines":["d"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"remove","lines":["<"]}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":[">"],"id":62},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"remove","lines":["v"]},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"remove","lines":["i"]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"remove","lines":["d"]},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"remove","lines":["/"]},{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"remove","lines":["<"]}],[{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"remove","lines":["\""],"id":63},{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"remove","lines":["w"]},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"remove","lines":["o"]},{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"remove","lines":["r"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"remove","lines":["\""]}],[{"start":{"row":7,"column":13},"end":{"row":7,"column":114},"action":"insert","lines":["<div class=\"row col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3>"],"id":64}],[{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"remove","lines":["<"],"id":65},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"remove","lines":["="]},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"remove","lines":["s"]},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"remove","lines":["s"]},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"remove","lines":["a"]},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"remove","lines":["l"]},{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"remove","lines":["c"]},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"remove","lines":[" "]},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":["v"]},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["i"]}],[{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"remove","lines":["d"],"id":66}],[{"start":{"row":7,"column":103},"end":{"row":7,"column":104},"action":"remove","lines":[">"],"id":67}],[{"start":{"row":7,"column":102},"end":{"row":7,"column":103},"action":"insert","lines":["\""],"id":68}]]},"ace":{"folds":[],"scrolltop":57.5,"scrollleft":0,"selection":{"start":{"row":18,"column":83},"end":{"row":18,"column":83},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527813330935,"hash":"abe1f38b332c455cad0154cc439f8e408bb14f86"}