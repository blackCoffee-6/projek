@props
<br><br>
    <select name="tg_bidangs">
        <option>Select Bidang</option>
        @foreach($bidangs as $bidang)
            <option value="{{$bidang->Bidang->name}}">{{$bidang->Bidang->name}}</option>
        @endforeach
    </select>