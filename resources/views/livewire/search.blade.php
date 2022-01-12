<div>
    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist"
           style="padding: 6px;font-size: 10px;border: 1px solid grey;float: left;width: 70%" placeholder="Search...."/>

    @if(!empty($query))
        <datalist id="mylist" >
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->menu?->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
