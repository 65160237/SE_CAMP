@extends('layouts.default')

@section('title','Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><b style="text-decoration: underline;">Workshop #SE-FORM</b></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active ">SE CAMP</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <form>
        <div class="card-body">
            {{-- --ชื่อ-- --}}
            <div class="form-group">
                <label style="color: black;">ชื่อ</label>
                <input type="text" class="form-control" id="InputName" placeholder="" pattern="^[ก-๙]+$"> <!-- ใสได้แค่ภาษาไทย -->
              </div>

            {{-- --นามสกุล-- --}}
            <div class="form-group">
                <label style="color: black;">นามสกุล</label>
                <input type="text" class="form-control" id="InputSurname" placeholder="">
            </div>
            {{-- --Name-- --}}
            <div class="form-group">
                <label style="color: black;">Name</label>
                <input type="text" class="form-control" id="InputName" placeholder="">
            </div>
            {{-- --Surname-- --}}
            <div class="form-group">
                <label style="color: black;">Surname</label>
                <input type="text" class="form-control" id="InputSurname" placeholder="">
            </div>
            {{-- --วัน/เดือน/ปีเกิด-- --}}
            <div class="form-group">
                <label style="color: black;">วัน/เดือน/ปีเกิด</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" id="InputBirthday" placeholder="dd-mm-yyyy">
                </div>
            </div>
            {{-- --อายุ-- --}}
            <div class="form-group">
                <label style="color: black;">อายุ</label>
                <input type="number" class="form-control" id="InputAge" placeholder="" min="0"
                    max="100">
            </div>
            {{-- --เพศ-- --}}
            <div class="form-group">
                <label style="color: black;">เพศ</label><br/>
                <input id="man" type="radio" name="same-radio" />&nbsp
                <label><b class="CO">ผู้ชาย</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="girl" type="radio" name="same-radio" />&nbsp
                <label><b class="CO">ผู้หญิง</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="LGBTQ" type="radio" name="same-radio" />&nbsp
                <label><b class="CO">LGBTQ</b></label>
            </div>
            {{-- --รูปภาพ-- --}}
            <div class="form-group">
                <label for="exampleInputFile" style="color: black;">รูปภาพ</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFile">
                        <label class="custom-file-label">เลือกไฟล์</label>
                    </div>
                </div>
            </div>
            {{-- --ที่อยู่-- --}}
            <div class="form-group">
                <b><label style="color: black;">ที่อยู่</label></b>
                <textarea class="form-control" rows="3" placeholder=""></textarea>
            </div>
            {{-- --สีที่ชอบ-- --}}
            <div class="form-group">
                <label style="color: black;"><b>สีที่ชอบ</b></label>
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">-</option>
                    <option style="color: #1a237e;">น้ำเงิน</option>
                    <option style="color: #9c27b0;">ม่วง</option>
                    <option style="color: #e91e63;">ชมพู</option>
                    <option style="color: #259b24;">เขียว</option>
                    <option style="color: red;">แดง</option>
                    <option style="color: #ffeb3b;">เหลือง</option>
                </select>
            </div>
            {{-- --แนวเพลงที่ชอบ-- --}}
            <div class="form-group">
                <label style="color: black;">แนวเพลงที่ชอบ</label><br />
                <input id="เพื่อชีวิต" type="radio" name="same-radio1" />&nbsp
                <label><b class="CO">เพื่อชีวิต</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="ลูกทุ่ง" type="radio" name="same-radio2" />&nbsp
                <label><b class="CO">ลูกทุ่ง</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="แร็พ" type="radio" name="same-radio3" />&nbsp
                <label><b class="CO">แร็พ</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="ฮิปฮอป" type="radio" name="same-radio4" />&nbsp
                <label><b class="CO">ฮิปฮอป</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="Other" type="radio" name="same-radio5" />&nbsp
                <label><b class="CO">อื่นๆ</b></label>
            </div>
            {{-- --เบอร์โทรศัพท์-- --}}
            <div class="form-group">
                <label style="color: black;">เบอร์โทรศัพท์</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"Mask": "(999) 999-9999"' data-mask>
                </div>
            </div>

            {{-- --เช็ค-- --}}
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="color: red;">ยินยอมให้เก็บข้อมูล</label>
            </div>

        </div>
        {{-- --ปุ่ม-- --}}
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            <button type="reset" class="btn btn-secondary" style="background-color: red;">Reset</button>
          </div>

    </form>
@endsection
