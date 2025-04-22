# CNM
--- Lưu ý ---

git clone đường dẫn project(lần đầu thì code)
Mỗi người khi code sẽ push lên branch của mình, ko đc push bằng branch main vì sẽ gây xung đột
Trước khi bắt đầu code thì hãy chuyển sang branch main để pull code về trước (git checkout main --> git pull)
Có code mới thì sang branch mình để gộp code từ branch main sang branch của mình: git checkout tenBranch --> git merge main TenBranch (vd: git merge main phuc), r sang branch của mình để code: git checkout phuc
#Lệnh

Kiểm tra branch: git branch
Chuyển branch: git checkout Tenbranch (vd: git checkout phuc)
#Sau khi code xong

git add .
git commit -m "ghi chú" (phần ghi chú thì ghi đã làm đc gì)
git push
Sau khi push, lên trang git nhấn Pull requests để gộp code từ branch của mình sang branch main
Có code mới thì sang branch main để gộp code từ branch main sang branch của mình: git checkout main --> git merge main TenBranch (vd: git merge main phuc), r sang branch của mình để code: git checkout phuc
