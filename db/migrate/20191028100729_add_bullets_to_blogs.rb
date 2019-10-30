class AddBulletsToBlogs < ActiveRecord::Migration[5.2]
  def change
    add_column :blogs, :bullet, :text
  end
end
