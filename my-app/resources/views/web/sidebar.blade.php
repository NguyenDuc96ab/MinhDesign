<div class="all"> 
    <div class="abc">
        <h2>Nhận tư vấn ngay</h2>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar">
    <!-- Form Box -->
    <div class="form-box">
        <div class="form-container">
            <form accept-charset='UTF-8' action="{{ route('lien-he') }}" method="POST" onsubmit="return validateForm()">
              
                <input name='form_type' type='hidden' value='contact'>
                        <input name='utf8' type='hidden' value='✓'>
                <div class="form-group">
                    <label for="name">Họ Tên</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <span class="error-message" id="error-name"></span>
                </div>
                <div class="form-group">
                    <label for="phone">Số Điện Thoại</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                    <span class="error-message" id="error-phone"></span>
                </div>
                <div class="form-group">
                    <label for="area">Diện Tích Đất</label>
                    <input type="text" class="form-control" id="area" name="area">
                    <span class="error-message" id="error-area"></span>
                </div>
                <div class="form-group">
                    <label for="floors">Số Tầng Muốn Xây</label>
                    <input type="number" class="form-control" id="floors" name="floors">
                    <span class="error-message" id="error-floors"></span>
                </div>
                <div class="form-group">
                    <label for="location">Địa Phương</label>
                    <input type="text" class="form-control" id="location" name="location">
                    <span class="error-message" id="error-location"></span>
                </div>
                <div class="form-group">
                    <label>Ngân Sách</label>
                    <div>
                        <label class="checkbox-inline"><input type="checkbox" name="budget[]" value="Dưới 500 triệu"> Dưới 500 triệu</label>
                        <label class="checkbox-inline"><input type="checkbox" name="budget[]" value="500 - 1 tỷ"> 500 - 1 tỷ</label>
                        <label class="checkbox-inline"><input type="checkbox" name="budget[]" value="1 - 2 tỷ"> 1 - 2 tỷ</label>
                        <label class="checkbox-inline"><input type="checkbox" name="budget[]" value="2 - 3 tỷ"> 2 - 3 tỷ</label>
                        <label class="checkbox-inline"><input type="checkbox" name="budget[]" value="3 - 4 tỷ"> 3 - 4 tỷ</label>
                        <label class="checkbox-inline"><input type="checkbox" name="budget[]" value="Trên 4 tỷ"> Trên 4 tỷ</label>
                    </div>
                    <span class="error-message" id="error-budget"></span>
                </div>
                <div class="form-group">
                    <label for="design-advice">Tư Vấn Thiết Kế</label>
                    <select class="form-control" id="design-advice" name="design_advice">
                        <option value="">Chọn một</option>
                        <option value="Không">Không</option>
                        <option value="Có, miễn phí">Có, miễn phí</option>
                        <option value="Có, có phí">Có, có phí</option>
                        <option value="Cần thêm thông tin">Cần thêm thông tin</option>
                    </select>
                    <span class="error-message" id="error-design-advice"></span>
                </div>
                <div class="form-group">
                    <label for="detailed-requirements">Yêu Cầu Chi Tiết</label>
                    <textarea class="form-control" id="detailed-requirements" name="detailed_requirements" rows="4"></textarea>
                    <span class="error-message" id="error-detailed-requirements"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Gửi</button>
                @csrf
            </form>
        </div>
    </div>
</div>

    <div class="abcd">
        <h2>Bài viết mới</h2>
    
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar">
        <!-- Form Box -->
        <div class="form-box">
            <!-- Nội dung mới -->
            <ul class="news-list">
                <li class="news-item">
                    <img src="image4.jpg" alt="Bài viết 4" class="news-image">
                    <p class="news-title">Tên bài viết 4</p>
                </li>
                <li class="news-item">
                    <img src="image5.jpg" alt="Bài viết 5" class="news-image">
                    <p class="news-title">Tên bài viết 5</p>
                </li>
                <li class="news-item">
                    <img src="image6.jpg" alt="Bài viết 6" class="news-image">
                    <p class="news-title">Tên bài viết 6</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        let isValid = true;

        // Clear previous error messages
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        // Validate name
        const name = document.getElementById('name').value;
        if (name.trim() === '') {
            document.getElementById('error-name').textContent = 'Họ Tên là bắt buộc.';
            isValid = false;
        }

        // Validate phone
        const phone = document.getElementById('phone').value;
        const phonePattern = /^[0-9]{10,11}$/;
        if (!phonePattern.test(phone)) {
            document.getElementById('error-phone').textContent = 'Số Điện Thoại không hợp lệ. Vui lòng nhập 10-11 chữ số.';
            isValid = false;
        }

        // Validate area
        const area = document.getElementById('area').value;
        const areaPattern = /^\d+(\.\d{1,2})?$/;
        if (!areaPattern.test(area)) {
            document.getElementById('error-area').textContent = 'Diện Tích Đất không hợp lệ.';
            isValid = false;
        }

        // Validate floors
        const floors = document.getElementById('floors').value;
        if (floors < 1 || floors > 100) {
            document.getElementById('error-floors').textContent = 'Số Tầng Muốn Xây phải nằm trong khoảng 1 đến 100.';
            isValid = false;
        }

        // Validate location
        const location = document.getElementById('location').value;
        if (location.trim() === '') {
            document.getElementById('error-location').textContent = 'Địa Phương là bắt buộc.';
            isValid = false;
        }

        // Validate budget
        const budgetCheckboxes = document.querySelectorAll('input[name="budget[]"]:checked');
        if (budgetCheckboxes.length === 0) {
            document.getElementById('error-budget').textContent = 'Vui lòng chọn ít nhất một lựa chọn cho ngân sách.';
            isValid = false;
        }

        // Validate design advice
        const designAdvice = document.getElementById('design-advice').value;
        if (designAdvice === '') {
            document.getElementById('error-design-advice').textContent = 'Vui lòng chọn Tư Vấn Thiết Kế.';
            isValid = false;
        }

        // Validate detailed requirements
        const detailedRequirements = document.getElementById('detailed-requirements').value;
        if (detailedRequirements.trim() === '') {
            document.getElementById('error-detailed-requirements').textContent = 'Yêu Cầu Chi Tiết là bắt buộc.';
            isValid = false;
        }

        return isValid;
    }
</script>

<style>
        .error-message {
            color: red;
            margin-top: 5px;
            display: block;
        }
    </style>

@if (Session::has('error'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("message").innerHTML = "{{ Session::get('error') }}";
    });
</script>
@endif

@if (Session::has('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("message").innerHTML = "{{ Session::get('success') }}";
    });
</script>
@endif

