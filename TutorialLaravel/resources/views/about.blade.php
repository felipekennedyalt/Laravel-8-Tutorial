<!--@if (5 > 10)
<p>5 is less than 10 </p>
@elseif(5 > 10)
        <p>5 is less than 10</p>
@else 
        <h2>all is wrong</h2>
@endif

@unless(empty($name))
            <h2> name inst empty</h2>
@endunless

@empty($secondName)
            <h2> name is empty</h2>
@endempty

@isset($name)
            <h2>name has been set</h2>
@endisset


comparing multiple possible conditions
multiple values that may require the same code


@switch($name)
    @case('Felipe')
        <h2>Name is Felipe!</h2>
    @break
    @case('Jhon')
        <h2>name is Jhon!</h2>
    @break
    @case('kennedy')
        <h2>name is Kennedy!</h2>
    @break
    @default
        <h2>no match found!</h2>
@endswitch

for loop
foreach loop
for else loop
while loop

@for ($i = 0; $i <= 10; $i++)
    <h2> the number is {{ $i }}</h2>
@endfor
-->

@foreach ($names as $item)
    <h2>The name is {{ $item }}</h2>
@endforeach