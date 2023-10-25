<?php


	namespace app\models;


	use RedBeanPHP\R;

	class Blog extends AppModel
	{

		public function get_blog($slug, $lang): array
		{
			return R::getRow("SELECT p.*, pd.* FROM blog p JOIN blog_description pd on p.id = pd.blog_id WHERE p.status = 1 AND p.slug = ? AND pd.language_id = ?", [$slug, $lang['id']]);
		}

		//public function get_gallery($product_id): array
		//{
		//	return R::getAll("SELECT * FROM product_gallery WHERE product_id = ?", [$product_id]);
		//}

	}