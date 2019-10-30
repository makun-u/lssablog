class CreateBlogs < ActiveRecord::Migration[5.2]
  def change
    create_table :blogs do |t|

      t.string :title, null: false
      t.text :sentence, null: false
      t.timestamps
    end
  end
end
