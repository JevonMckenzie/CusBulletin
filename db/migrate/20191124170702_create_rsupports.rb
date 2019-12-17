class CreateRsupports < ActiveRecord::Migration[6.0]
  def change
    create_table :rsupports do |t|
      t.string :closed
      t.boolean :open
      t.string :description
      t.text :recommendation
      t.integer :support_id
      t.integer :user_id
      t.timestamps
    end
  end
end
