<?php
/**
 * Created at: 5:12 PM
 * File: ProductController.php
 */

class ProductController extends Database
{
    public function getProducts()
    {
        return $this->queryAll("SELECT * from products order by id desc");
    }

    public function getProduct($id)
    {
        return $this->query("select * from products where id = " . $id);
    }

    public function createProduct($data, $file)
    {
        $thumbnail = $data['thumbnail'] = "images/" . $file['thumbnail']['name'];
        $this->create("insert into products (title,excerpt,body,price, thumbnail) values (:title,:excerpt ,:body,:price, :thumbnail)", $data);

//        move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'images/' . $file['thumbnail']['name']);

        header("Location: index.php");
    }

    public function updateProduct($id, $data)
    {
        $db = $this->getDb();
//        $stmt = $db->prepare("UPDATE products SET title = ? , excerpt = ? , price = ? , body = ? WHERE id = ?");
//        $stmt->execute([
//            $data['title'],
//            $data['excerpt'],
//            $data['price'],
//            $data['body'],
//            $id
//        ]);
        header("Location: index.php");
    }

    public function deleteProduct($id)
    {
        $this->query("delete from products where id =" . $id);
        header("Location: index.php");
    }
}