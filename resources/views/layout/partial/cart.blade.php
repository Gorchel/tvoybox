@if (count(Cart::content()) > 0)
    <?php foreach(Cart::content() as $row) :?>
        <span>{{$row->name}}</span>
    <?php endforeach;?>
@else
    <span>Боксиков пока нет :(</span>
@endif