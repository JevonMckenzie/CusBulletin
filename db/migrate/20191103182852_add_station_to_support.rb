class AddStationToSupport < ActiveRecord::Migration[6.0]
  def change
    add_column :supports, :station, :string
  end
end
