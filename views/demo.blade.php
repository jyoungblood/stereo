@extends('_layouts.base')
@section('title', 'Demo')
@section('content')



<h1>HI!</h1>
<hr />

?? {{ $who | strtoupper | base64_encode }} ??<br>
<br />

?? thing: {{ $_GET['thing'] }} ??<br />
?? env site_code: {{ $_ENV['SITE_CODE'] }} ??<br />
?? globals.hello: {{ print_r($GLOBALS['hello']) }} ??<br />

<hr /><Hr />

@component('component.alert',array('title'=>'COMPONENT #2469','color'=>"turquoise"))
    <strong>Whoops!</strong> Something went wrong! (the code is right btw)
@endcomponent

<hr /><Hr />


@php
  $local_countries = array(
    array('value' => 'US', 'text' => 'United States'),
    array('value' => 'CA', 'text' => 'Canada'),
    array('value' => 'MX', 'text' => 'Mexico'),
  );
@endphp

<select>
  @foreach($local_countries as $c)
    <option value={{$c['value'] }} >{{ $c['text'] }}</option>
  @endforeach
</select>


@php
  $iam = 'goops';
@endphp



<br /><br />


@if ($iam == 'slime')

  i am slime

@elseif($iam == 'goop')

  i am goop enthusiast

@else

  i am that i am

@endif


<br /><br />
<hr /><hr />
<br /><br />


@include('horse', ['huh' => 'what', 'lala' => [
  'tele' => 'tubby'
]]);



<br /><br />
<hr /><hr />
<br /><br />



@foreach ($hello_arr as $hi)
<a class="text-red-500 underline" href="/hello/{{ $hi['name'] }}">hello, {{ $hi['name'] }}</a> from {{ $hi['location'] }}<br />
@endforeach




@foreach ($hello as $hi)
<a class="text-red-500 underline" href="/hello/{{ $hi->name }}">hello, {{ $hi->name }}</a> from {{ $hi->location }}<br />
@endforeach



@push('testpushscripts')
script1
@endpush
@push('testpushscripts')
script2
@endpush
@push('testpushscripts')
script3
@endpush
<hr>
@stack('testpushscripts')
<hr>

<br /><br />
<hr /><hr />
<br /><br />





<a class="text-red-500 underline" href="/blade?firstname=rick&lastname=ross">fill form from GET</a>

    @form()
        @input(type="text" name="firstname" value=$firstname class="p-4")
        @input(type="text" name="lastname" value=$lastname class="p-4")
        @input(type="text" name="email" value=$saved['email'] class="p-4")
        @button(text="heck me" type="submit" class="bg-blue-500 text-white p-4 rounded-md")
    @endform()

    <hr /><hr />
@link(href="https://slime.technology" text="slime.texhcbology" class="text-red-500 underline")

    <hr /><hr />

@ol(id="1aaa" value=$selection values=$countries alias=$country)
    @item(value='aaa' text='hello world')
    @item(value='aaa' text='hello world')
    @item(value='aaa' text='hello world')
    @items(value=$country->id text=$country->name)
@endol

{{-- // fixit make multiple values work? --}}
@select(id="2aaa" value=$selection alias=$country multiple="multiple")
    @item(value='aaa' text='hello world')
    @item(value='aaa' text='hello world')
    @item(value='aaa' text='hello world')
    @items(values=$countries value=$country->id text=$country->name)
@endselect



@select(id="3aaa" value=$selection values=$countries alias=$country)
    @items( id="chkx" value=$country->id text=$country->name)
@endselect


@select(id="4aaa" value=$selection values=$countries alias=$country)
    @optgroup(label="group1")
        @item(value='aaa' text='hello world')
        @item(value='aaa' text='hello world')
        @item(value='aaa' text='hello world')
    @endoptgroup
    @items( value=$country->id text=$country->name optgroup=$country->continent)
@endselect

<br /><br />
<hr /><hr />
<br /><br />







@push('testpushstyles')
<br />hi from T6gxNp0nuPtLkmRpmDBbjg6WmCUZRLXBBwYYmwAUxzlSGej0ARHX0Bo
@endpush

@push('testpushstyles')
<br />hey bitch
@endpush

@pushonce('testpushstyles')
<br />-hey bitch
@endpushonce


@push('testpushstyles')
<br />anything else after that?
@endpush


@pushonce('testpushstyles')
<br />and what about this
@endpushonce





@endsection
