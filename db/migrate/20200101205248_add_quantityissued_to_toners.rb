class AddQuantityissuedToToners < ActiveRecord::Migration[6.0]
  def change
    add_column :toners, :quantityissued, :integer
  end
end
