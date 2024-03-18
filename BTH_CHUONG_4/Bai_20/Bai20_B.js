let tinhToanTienLuong = () => {
    let hoVaTen = document.getElementById('hoVaTen');
    let ngayVaoLam = document.getElementById('ngayVaoLam');
    let heSo = document.getElementById('heSo');
    let luongCoSo = document.getElementById('luongCoSo');
    let luongCoBan = document.getElementById('luongCoBan');
    let phuCap = document.getElementById('phuCap');
    let thamNien = document.getElementById('thamNien');
    let thanhTien = document.getElementById('thanhTien');

    luongCoBan.value = parseFloat(heSo.value) * parseFloat(luongCoSo.value);
    phuCap.value = 0.25 * parseFloat(luongCoBan.value);
    thamNien.value = 2024 - parseFloat(ngayVaoLam.value);
    thanhTien.value = parseFloat(luongCoBan.value) + parseFloat(phuCap.value);


}