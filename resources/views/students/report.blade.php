<!DOCTYPE html> 
<html> 
    <head> 
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title> 
    </head> 
    <body> 
        <style type="text/css"> table tr td, table tr th{ font-size: 9pt; } </style> 
        <div class="card-header" align="center"><b>{{ __('JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG') }}</b></div>

        <div class="card-body">
            <center>
                <b>{{ __('KARTU HASIL STUDI (KHS)') }}</b>
            </center>

            <div class="card-body">
                Name : {{ $student->name }} <br>
                NIM : {{ $student->nim }} <br> 
                Class : {{ $student->kelas->class_name }} <br>
                Department : {{ $student->department }} <br><br>
            </div>
            
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Mata kuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student->courses as $cs)
                    <tr>
                        <td>{{ $cs->course_name }}</td>
                        <td>{{ $cs->sks }}</td>
                        <td>{{ $cs->semester }}</td>
                        <td>{{ $cs->pivot->nilai }} </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </body> 
</html>