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
                    <p></p>
                </div>
            </div>
        </div>

        <div class="card col-12 p-3 my-3">
            <h2 class="mb-4">الأسئلة</h2>
            <form method="post" action="{{ route('postquizz') }}">

                @csrf
                <div class="card col-12 p-3 my-3">
                    <h2 class="mb-4">الأسئلة</h2>

                    @forelse ($quizz->questions as $index => $q)
                        <div class="mb-4">
                            <p class="fw-bold">{{ $index + 1 }}. {{ $q->text }}</p>

                            {{-- إدخال مخفي لتضمين معرف السؤال في المصفوفة --}}
                            <input type="hidden" name="answers[{{ $index }}][question_id]"
                                value="{{ $q->id }}">

                            @if ($q->type === 'msq')
                                @foreach ($q->options as $op)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            name="answers[{{ $index }}][selected_option]"
                                            id="option_{{ $op->id }}" value="{{ $op->id }}">
                                        <label class="form-check-label" for="option_{{ $op->id }}">
                                            {{ $op->text }}
                                        </label>
                                    </div>
                                @endforeach
                            @elseif ($q->type === 'tf')
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="answers[{{ $index }}][selected_option]" id="true_{{ $q->id }}"
                                        value="true">
                                    <label class="form-check-label" for="true_{{ $q->id }}">صح</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="answers[{{ $index }}][selected_option]"
                                        id="false_{{ $q->id }}" value="false">
                                    <label class="form-check-label" for="false_{{ $q->id }}">خطأ</label>
                                </div>
                            @endif
                        </div>
                    @empty
                        <p class="text-muted">لا يوجد اختبارات بعد!</p>
                    @endforelse

                    <button type="submit" class="btn btn-primary">إرسال الإجابات</button>
                </div>
            </form>
        </div>

    </div>

@stop
