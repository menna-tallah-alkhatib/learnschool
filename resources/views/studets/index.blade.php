@extends('studets.masterstudet')
@section('title')
    مدرسة ليرن | صفحة الرئيسية للطلاب
@stop
@section('content')
        <div class="navbar">مدرسة الغد</div>

        <div class="container">

            <!-- معلومات الطالب -->
            <div class="card col-12">
                <h2>معلومات الطالب</h2>
                <div class="student-info">
                    <div class="student-details">
                        <p><strong>الاسم:</strong> {{ $user->student->first_name }} {{ $user->student->last_name }}</p>
                        <p><strong>الصف:</strong> {{ $user->student->grade->name }} </p>
                        <p><strong>الشعبة:</strong> {{ $user->student->section->name }}</p>
                    </div>
                </div>
            </div>

            <!-- المواد الدراسية -->
            <div class="card col-12">
                <h2>المواد الدراسية</h2>
                <div class="subjects-grid">
                    @foreach ($subjects as $sub)
                        <a href="{{ route('subject', $sub->id) }}">
                            <div class="subject-card"><i class="fas fa-calculator"></i><span>{{ $sub->title }}</span></div>
                        </a>
                    @endforeach

                </div>
            </div>

        </div>
@stop
