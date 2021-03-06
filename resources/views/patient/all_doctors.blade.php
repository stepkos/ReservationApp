@extends('layouts.layout_patient')

@section('title', 'Panel pacjenta - Wszyscy lekarze')


@section('content')
<section id="doctors_list">
    <div id="doctors_list_holder">

        @foreach($doctors as $doctor)

            <div class="doctor_holder">
                <div class="doctor_profile_picture" style="background-image: url('./images/profile_picture.jpg')"></div>
                <div class="doctor_info">
                    <div class="doctor_name">
                        {{ $doctor->name }}
                    </div>
                    <div class="doctor_telephone">
                        <span style="font-weight: bold;">Tel:</span> {{ $doctor->phone }}
                    </div>
                    <div class="doctor_telephone">
                        <span style="font-weight: bold;">Email:</span> {{ $doctor->email }}
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</section>
@endsection