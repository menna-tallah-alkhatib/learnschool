@extends('studets.masterstudet')
@section('title')
    مدرسة ليرن | صفحة الرئيسية للطلاب
@stop

@section('content')
    <div class="navbar">مدرسة الغد</div>

    <div class="container">

        <!-- معلومات الطالب -->
        <div class="card col-12">
            <h2>الكتب المرفقة</h2>
            <div class="student-info">
                <div class="student-details">
                         <a href="{{ route('download' , $subject->book) }} " class="btn btn-primary btn-sm"
                            >
                              <p>{{ $subject->title }}</p>
                        </a>
                </div>
            </div>
        </div>

        <!-- معلومات الطالب -->
        <div class="card col-12">
            <h2>الاختبارات</h2>
            <div class="student-info">
                <div class="student-details">
                    @forelse ($subject->quizz as $q)
                        <a href="{{ route('quizz', $q->id) }}">
                            <p>{{ $q->title }}</p>
                        </a>
                    @empty
                        <p>لا يوجد اختبارات بعد !</p>
                    @endforelse
                </div>
            </div>
        </div>

    </div>

@stop
