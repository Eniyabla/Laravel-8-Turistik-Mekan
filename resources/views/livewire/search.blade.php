<div class="search">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <input wire:model="search" name="search" type="text" list="myplaces" placeholder="search place..."/>
      @if(!empty($query))
        <datalist id="myplaces" >
                @foreach($datalist as $data)
                    <option value="{{$data->title}}">{{$data->category->title}}</option>
                @endforeach
        </datalist>
       @endif
</div>
