@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Contacts</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trang-chu')}}">Home</a> / <span>Contacts</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="beta-map">

    <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.3943301052873!2d108.21567531478362!3d16.045014344348427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c10f17a939%3A0x773daa9fdc88e436!2zMTI3IFRp4buDdSBMYSwgSG_DoCBDxrDhu51uZyBC4bqvYywgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1586071014781!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
</div>
<div class="container">
    <div id="content" class="space-top-none">

        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h2>Phản ánh</h2>
                <div class="space20">&nbsp;</div>
                <p>Để liên lạc với chúng tôi, hãy sử dụng mẫu e-mail sau. Chúng tôi mong nhận được thông tin từ phía bạn.

                    Mẫu liên lạc này được cung cấp như một dịch vụ và không dành cho việc cung cấp những sự kiện bất lợi và những vấn đề y khoa.
                    Nếu những lời phê bình của bạn liên quan đến tình trạng sức khỏe cá nhân, những vấn đề y khoa, hoặc có liên quan đến những quy định về sản phẩm của tiệm bánh Tròn,
                    bạn có thể hỏi ý kiến chuyên gia chăm sóc sức khỏe của bạn.</p>
                <div class="space20">&nbsp;</div>
                <form action="#" method="post" class="contact-form">
                    <div class="form-block">
                        <input name="your-name" type="text" placeholder="Your Name (required)">
                    </div>
                    <div class="form-block">
                        <input name="your-email" type="email" placeholder="Your Email (required)">
                    </div>
                    <div class="form-block">
                        <input name="your-subject" type="text" placeholder="Subject">
                    </div>
                    <div class="form-block">
                        <textarea name="your-message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="beta-btn primary">Send Message <i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>Thông tin liên hệ</h2>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title">Địa chỉ</h6>
                <p>
                    K127/9 Tiểu La<br>
                    Hòa Cường Bắc, Hải Châu <br>
                    TP Đà Nẵng
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Email</h6>
                <p>
                    Mọi thắc mắc, đánh giá, khen ngợi <br>
                    Xin gửi về email <br>
                    <a href="mailto:biz@betadesign.com">anhnhattlk@gmail.com</a>
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Liên hệ việc làm</h6>
                <p>
                    Chúng tôi cần tài năng của bạn <br>
                    Gia nhập cùng chúng tôi <br>
                    <a href="hr@betadesign.com">hr@tronbakery.com</a>
                </p>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
