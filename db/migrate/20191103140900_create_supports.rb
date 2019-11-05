class CreateSupports < ActiveRecord::Migration[6.0]
  def change
    create_table :supports do |t|
      t.string :typeofsupport
      t.string :servicetag
      t.string :description
      t.string :text
      t.references :user, null: false, foreign_key: true

      t.timestamps
    end
  end
end
