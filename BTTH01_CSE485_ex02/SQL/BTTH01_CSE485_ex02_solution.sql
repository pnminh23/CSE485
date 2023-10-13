SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
FROM baiviet bv
JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
WHERE tl.ten_tloai = 'Nhạc trữ tình';

SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
FROM baiviet bv
JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
WHERE tg.ten_tgia = 'Nhacvietplus';

SELECT tl.ma_tloai, tl.ten_tloai
FROM theloai tl
LEFT JOIN baiviet bv ON tl.ma_tloai = bv.ma_tloai
WHERE bv.ma_tloai IS NULL;

SELECT bv.ma_bviet,bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
FROM baiviet bv
JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai;

SELECT tl.ma_tloai, tl.ten_tloai, COUNT(bv.ma_bviet) AS so_bai_viet
FROM theloai tl
JOIN baiviet bv ON tl.ma_tloai = bv.ma_tloai
GROUP BY tl.ma_tloai
ORDER BY so_bai_viet DESC
LIMIT 1;

SELECT tg.ma_tgia,tg.ten_tgia, COUNT(bv.ma_bviet) AS so_bai_viet
FROM tacgia tg
JOIN baiviet bv ON tg.ma_tgia = bv.ma_tgia
GROUP BY tg.ma_tgia
ORDER BY so_bai_viet DESC
LIMIT 2;

SELECT bv.ma_bviet, bv.ten_bhat
FROM baiviet bv
WHERE bv.ten_bhat LIKE '%yeu%' OR bv.ten_bhat LIKE '%thuong%' OR bv.ten_bhat LIKE '%anh%' OR bv.ten_bhat LIKE '%em%'




