class AddStationToUser < ActiveRecord::Migration[6.0]
  def change
    add_column :users, :station, :string
  end
end
