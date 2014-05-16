<?php
function insert()
{
      $title = $this->input->post('title');
      $data = array('title' => $title);
      $this->db->insert('articles', $data);
      $article_id = $this->db->insert_id();
      $categories = $this->input->post('categories');
      $data = array();

      foreach($categories as $category_id)
      {
         $data[] = array(
          'articles_id' => $article_id,
          'categories_id' => $caregory_id
         );
      }
      $this->db->insert_batch('articles_categories', $data);
}

function delete($id)
{
     $this->db->delete('articles',array('id'=>$id));
}

function update($id)
{
    $id= $this->input->post('id');
    $title=$this->input->post('title');
    $categories = $_POST['categories'];

    $data=array(
        'title'=>$title,
    );

    $this->db->where('id', $id);
    $this->db->update('articles',$data);
    /*can update articles table now */


    /* here is the missing idea and what I had done so far*/
    $bb = array();
    foreach($categories as $categories_id )
    {
      $bb[] = array(
        'articles_id' => $id ,
    'categories_id' =>$categories_id 
      );                    
    }
    $this->db->update('articles_categories',$bb);
    /* end of missing idea */
}

   function select($id)
   {
     $query=$this->db->get_where('articles',array('slug'=>$slug));
     return $query->row_array();    

      /*missing idea to retieve categories */
   }

  function select_categories()

  {
     /*missing idea to retieve categories */
  }
?>